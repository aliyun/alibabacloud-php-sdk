<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData\instanceInfo\config;
use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var config[]
     */
    public $config;

    /**
     * @var int
     */
    public $firstUpdateTime;

    /**
     * @var int
     */
    public $lastUpdateTime;
    protected $_name = [
        'config'          => 'Config',
        'firstUpdateTime' => 'FirstUpdateTime',
        'lastUpdateTime'  => 'LastUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->firstUpdateTime) {
            $res['FirstUpdateTime'] = $this->firstUpdateTime;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FirstUpdateTime'])) {
            $model->firstUpdateTime = $map['FirstUpdateTime'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        return $model;
    }
}
