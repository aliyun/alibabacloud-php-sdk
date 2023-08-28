<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\hdfs;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\odps;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\oss;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\saro;
use AlibabaCloud\Tea\Model;

class extend extends Model
{
    /**
     * @var hdfs
     */
    public $hdfs;

    /**
     * @var odps
     */
    public $odps;

    /**
     * @var oss
     */
    public $oss;

    /**
     * @var saro
     */
    public $saro;
    protected $_name = [
        'hdfs' => 'hdfs',
        'odps' => 'odps',
        'oss'  => 'oss',
        'saro' => 'saro',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hdfs) {
            $res['hdfs'] = null !== $this->hdfs ? $this->hdfs->toMap() : null;
        }
        if (null !== $this->odps) {
            $res['odps'] = null !== $this->odps ? $this->odps->toMap() : null;
        }
        if (null !== $this->oss) {
            $res['oss'] = null !== $this->oss ? $this->oss->toMap() : null;
        }
        if (null !== $this->saro) {
            $res['saro'] = null !== $this->saro ? $this->saro->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hdfs'])) {
            $model->hdfs = hdfs::fromMap($map['hdfs']);
        }
        if (isset($map['odps'])) {
            $model->odps = odps::fromMap($map['odps']);
        }
        if (isset($map['oss'])) {
            $model->oss = oss::fromMap($map['oss']);
        }
        if (isset($map['saro'])) {
            $model->saro = saro::fromMap($map['saro']);
        }

        return $model;
    }
}
