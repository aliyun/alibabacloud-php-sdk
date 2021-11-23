<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\loadConfig;

use AlibabaCloud\Tea\Model;

class relationLoadConfigList extends Model
{
    /**
     * @var int
     */
    public $concurrencyBegin;

    /**
     * @var int
     */
    public $concurrencyLimit;
    protected $_name = [
        'concurrencyBegin' => 'ConcurrencyBegin',
        'concurrencyLimit' => 'ConcurrencyLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrencyBegin) {
            $res['ConcurrencyBegin'] = $this->concurrencyBegin;
        }
        if (null !== $this->concurrencyLimit) {
            $res['ConcurrencyLimit'] = $this->concurrencyLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationLoadConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrencyBegin'])) {
            $model->concurrencyBegin = $map['ConcurrencyBegin'];
        }
        if (isset($map['ConcurrencyLimit'])) {
            $model->concurrencyLimit = $map['ConcurrencyLimit'];
        }

        return $model;
    }
}
