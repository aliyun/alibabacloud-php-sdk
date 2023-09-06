<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody\defaultReceivedConvs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody\defaultReceivers;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody\fields;
use AlibabaCloud\Tea\Model;

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
     * @example 11111
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example 1234
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultReceivedConvs) {
            $res['defaultReceivedConvs'] = [];
            if (null !== $this->defaultReceivedConvs && \is_array($this->defaultReceivedConvs)) {
                $n = 0;
                foreach ($this->defaultReceivedConvs as $item) {
                    $res['defaultReceivedConvs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultReceivers) {
            $res['defaultReceivers'] = [];
            if (null !== $this->defaultReceivers && \is_array($this->defaultReceivers)) {
                $n = 0;
                foreach ($this->defaultReceivers as $item) {
                    $res['defaultReceivers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetReportTemplateByNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultReceivedConvs'])) {
            if (!empty($map['defaultReceivedConvs'])) {
                $model->defaultReceivedConvs = [];
                $n                           = 0;
                foreach ($map['defaultReceivedConvs'] as $item) {
                    $model->defaultReceivedConvs[$n++] = null !== $item ? defaultReceivedConvs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['defaultReceivers'])) {
            if (!empty($map['defaultReceivers'])) {
                $model->defaultReceivers = [];
                $n                       = 0;
                foreach ($map['defaultReceivers'] as $item) {
                    $model->defaultReceivers[$n++] = null !== $item ? defaultReceivers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
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
