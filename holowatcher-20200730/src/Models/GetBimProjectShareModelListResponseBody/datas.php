<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectShareModelListResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectShareModelListResponseBody\datas\bounds;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectShareModelListResponseBody\datas\buildings;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectShareModelListResponseBody\datas\stsToken;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var bounds
     */
    public $bounds;

    /**
     * @var buildings[]
     */
    public $buildings;

    /**
     * @var string
     */
    public $name;

    /**
     * @var stsToken
     */
    public $stsToken;
    protected $_name = [
        'bounds'    => 'Bounds',
        'buildings' => 'Buildings',
        'name'      => 'Name',
        'stsToken'  => 'StsToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bounds) {
            $res['Bounds'] = null !== $this->bounds ? $this->bounds->toMap() : null;
        }
        if (null !== $this->buildings) {
            $res['Buildings'] = [];
            if (null !== $this->buildings && \is_array($this->buildings)) {
                $n = 0;
                foreach ($this->buildings as $item) {
                    $res['Buildings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->stsToken) {
            $res['StsToken'] = null !== $this->stsToken ? $this->stsToken->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bounds'])) {
            $model->bounds = bounds::fromMap($map['Bounds']);
        }
        if (isset($map['Buildings'])) {
            if (!empty($map['Buildings'])) {
                $model->buildings = [];
                $n                = 0;
                foreach ($map['Buildings'] as $item) {
                    $model->buildings[$n++] = null !== $item ? buildings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StsToken'])) {
            $model->stsToken = stsToken::fromMap($map['StsToken']);
        }

        return $model;
    }
}
