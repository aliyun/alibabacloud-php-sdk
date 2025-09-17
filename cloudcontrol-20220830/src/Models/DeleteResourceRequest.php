<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class DeleteResourceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var mixed[]
     */
    public $filter;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'filter' => 'filter',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['filter'] = [];
                foreach ($this->filter as $key1 => $value1) {
                    $res['filter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['filter'])) {
            if (!empty($map['filter'])) {
                $model->filter = [];
                foreach ($map['filter'] as $key1 => $value1) {
                    $model->filter[$key1] = $value1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
