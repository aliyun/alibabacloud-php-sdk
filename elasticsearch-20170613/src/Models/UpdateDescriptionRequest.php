<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateDescriptionRequest extends Model
{
    /**
     * @example aliyunes_name_test
     *
     * @var string
     */
    public $description;

    /**
     * @description The new name of the instance.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B350****
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'description' => 'description',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
