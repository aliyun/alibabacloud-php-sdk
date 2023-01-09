<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\loadConfig;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $allConcurrencyBegin;

    /**
     * @example 10
     *
     * @var int
     */
    public $allConcurrencyLimit;

    /**
     * @example 80
     *
     * @var int
     */
    public $allRpsBegin;

    /**
     * @example 160
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
