<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\hdfs;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\odps;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\oss;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend\saro;

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
        'oss' => 'oss',
        'saro' => 'saro',
    ];

    public function validate()
    {
        if (null !== $this->hdfs) {
            $this->hdfs->validate();
        }
        if (null !== $this->odps) {
            $this->odps->validate();
        }
        if (null !== $this->oss) {
            $this->oss->validate();
        }
        if (null !== $this->saro) {
            $this->saro->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hdfs) {
            $res['hdfs'] = null !== $this->hdfs ? $this->hdfs->toArray($noStream) : $this->hdfs;
        }

        if (null !== $this->odps) {
            $res['odps'] = null !== $this->odps ? $this->odps->toArray($noStream) : $this->odps;
        }

        if (null !== $this->oss) {
            $res['oss'] = null !== $this->oss ? $this->oss->toArray($noStream) : $this->oss;
        }

        if (null !== $this->saro) {
            $res['saro'] = null !== $this->saro ? $this->saro->toArray($noStream) : $this->saro;
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
