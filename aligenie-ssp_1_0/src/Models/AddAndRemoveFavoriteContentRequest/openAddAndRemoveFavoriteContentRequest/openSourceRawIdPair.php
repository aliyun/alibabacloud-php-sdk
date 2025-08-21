<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\openAddAndRemoveFavoriteContentRequest;

use AlibabaCloud\Dara\Model;

class openSourceRawIdPair extends Model
{
    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $rawId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'extendInfo' => 'ExtendInfo',
        'rawId' => 'RawId',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->extendInfo)) {
            Model::validateArray($this->extendInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendInfo) {
            if (\is_array($this->extendInfo)) {
                $res['ExtendInfo'] = [];
                foreach ($this->extendInfo as $key1 => $value1) {
                    $res['ExtendInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rawId) {
            $res['RawId'] = $this->rawId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['ExtendInfo'])) {
            if (!empty($map['ExtendInfo'])) {
                $model->extendInfo = [];
                foreach ($map['ExtendInfo'] as $key1 => $value1) {
                    $model->extendInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['RawId'])) {
            $model->rawId = $map['RawId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
