<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @description 所有链路的起始并发总值，均分给每个链路，在并发模式下使用，若不设置该值，则relationLoadConfig必须填写
     *
     * @var int
     */
    public $allConcurrencyBegin;

    /**
     * @description 所有链路的最大并发总值，均分给每个链路，在并发模式下使用，若不设置该值，则relationLoadConfig必须填写
     *
     * @var int
     */
    public $allConcurrencyLimit;

    /**
     * @description 所有API的起始RPS总值，均分给每个API，在RPS模式下使用，若不设置该值，则apiLoadConfig必须填写
     *
     * @var int
     */
    public $allRpsBegin;

    /**
     * @description 所有API的最大RPS总值，均分给每个API，在RPS模式下使用，若不设置该值，则apiLoadConfig必须填写
     *
     * @var int
     */
    public $allRpsLimit;
    protected $_name = [
        'allConcurrencyBegin' => 'AllConcurrencyBegin',
        'allConcurrencyLimit' => 'AllConcurrencyLimit',
        'allRpsBegin'         => 'AllRpsBegin',
        'allRpsLimit'         => 'AllRpsLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allConcurrencyBegin) {
            $res['AllConcurrencyBegin'] = $this->allConcurrencyBegin;
        }
        if (null !== $this->allConcurrencyLimit) {
            $res['AllConcurrencyLimit'] = $this->allConcurrencyLimit;
        }
        if (null !== $this->allRpsBegin) {
            $res['AllRpsBegin'] = $this->allRpsBegin;
        }
        if (null !== $this->allRpsLimit) {
            $res['AllRpsLimit'] = $this->allRpsLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllConcurrencyBegin'])) {
            $model->allConcurrencyBegin = $map['AllConcurrencyBegin'];
        }
        if (isset($map['AllConcurrencyLimit'])) {
            $model->allConcurrencyLimit = $map['AllConcurrencyLimit'];
        }
        if (isset($map['AllRpsBegin'])) {
            $model->allRpsBegin = $map['AllRpsBegin'];
        }
        if (isset($map['AllRpsLimit'])) {
            $model->allRpsLimit = $map['AllRpsLimit'];
        }

        return $model;
    }
}
