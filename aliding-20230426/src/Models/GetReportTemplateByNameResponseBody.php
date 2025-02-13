<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody\defaultReceivedConvs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody\defaultReceivers;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody\fields;

class GetReportTemplateByNameResponseBody extends Model
{
    /**
     * @var defaultReceivedConvs[]
     */
    public $defaultReceivedConvs;
    /**
     * @var defaultReceivers[]
     */
    public $defaultReceivers;
    /**
     * @var fields[]
     */
    public $fields;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $userName;
    /**
     * @var string
     */
    public $userid;
    protected $_name = [
        'defaultReceivedConvs' => 'defaultReceivedConvs',
        'defaultReceivers'     => 'defaultReceivers',
        'fields'               => 'fields',
        'id'                   => 'id',
        'name'                 => 'name',
        'requestId'            => 'requestId',
        'userName'             => 'userName',
        'userid'               => 'userid',
    ];

    public function validate()
    {
        if (\is_array($this->defaultReceivedConvs)) {
            Model::validateArray($this->defaultReceivedConvs);
        }
        if (\is_array($this->defaultReceivers)) {
            Model::validateArray($this->defaultReceivers);
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultReceivedConvs) {
            if (\is_array($this->defaultReceivedConvs)) {
                $res['defaultReceivedConvs'] = [];
                $n1                          = 0;
                foreach ($this->defaultReceivedConvs as $item1) {
                    $res['defaultReceivedConvs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->defaultReceivers) {
            if (\is_array($this->defaultReceivers)) {
                $res['defaultReceivers'] = [];
                $n1                      = 0;
                foreach ($this->defaultReceivers as $item1) {
                    $res['defaultReceivers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1            = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultReceivedConvs'])) {
            if (!empty($map['defaultReceivedConvs'])) {
                $model->defaultReceivedConvs = [];
                $n1                          = 0;
                foreach ($map['defaultReceivedConvs'] as $item1) {
                    $model->defaultReceivedConvs[$n1++] = defaultReceivedConvs::fromMap($item1);
                }
            }
        }

        if (isset($map['defaultReceivers'])) {
            if (!empty($map['defaultReceivers'])) {
                $model->defaultReceivers = [];
                $n1                      = 0;
                foreach ($map['defaultReceivers'] as $item1) {
                    $model->defaultReceivers[$n1++] = defaultReceivers::fromMap($item1);
                }
            }
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1            = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1++] = fields::fromMap($item1);
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }

        return $model;
    }
}
