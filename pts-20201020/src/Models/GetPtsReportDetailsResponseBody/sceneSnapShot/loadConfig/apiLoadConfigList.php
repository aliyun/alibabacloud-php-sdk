<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\loadConfig;

use AlibabaCloud\Tea\Model;

class apiLoadConfigList extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $rpsBegin;

    /**
     * @example 10
     *
     * @var int
     */
    public $rpsLimit;
    protected $_name = [
        'rpsBegin' => 'RpsBegin',
        'rpsLimit' => 'RpsLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rpsBegin) {
            $res['RpsBegin'] = $this->rpsBegin;
        }
        if (null !== $this->rpsLimit) {
            $res['RpsLimit'] = $this->rpsLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiLoadConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RpsBegin'])) {
            $model->rpsBegin = $map['RpsBegin'];
        }
        if (isset($map['RpsLimit'])) {
            $model->rpsLimit = $map['RpsLimit'];
        }

        return $model;
    }
}
