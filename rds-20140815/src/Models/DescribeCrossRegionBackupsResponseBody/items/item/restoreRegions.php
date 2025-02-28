<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items\item;

use AlibabaCloud\Dara\Model;

class restoreRegions extends Model
{
    /**
     * @var string[]
     */
    public $restoreRegion;
    protected $_name = [
        'restoreRegion' => 'RestoreRegion',
    ];

    public function validate()
    {
        if (\is_array($this->restoreRegion)) {
            Model::validateArray($this->restoreRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restoreRegion) {
            if (\is_array($this->restoreRegion)) {
                $res['RestoreRegion'] = [];
                $n1                   = 0;
                foreach ($this->restoreRegion as $item1) {
                    $res['RestoreRegion'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RestoreRegion'])) {
            if (!empty($map['RestoreRegion'])) {
                $model->restoreRegion = [];
                $n1                   = 0;
                foreach ($map['RestoreRegion'] as $item1) {
                    $model->restoreRegion[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
