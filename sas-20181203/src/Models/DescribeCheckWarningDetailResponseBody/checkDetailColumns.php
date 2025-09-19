<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody\checkDetailColumns\grids;

class checkDetailColumns extends Model
{
    /**
     * @var grids[]
     */
    public $grids;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'grids' => 'Grids',
        'key' => 'Key',
        'showName' => 'ShowName',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->grids)) {
            Model::validateArray($this->grids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grids) {
            if (\is_array($this->grids)) {
                $res['Grids'] = [];
                $n1 = 0;
                foreach ($this->grids as $item1) {
                    $res['Grids'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Grids'])) {
            if (!empty($map['Grids'])) {
                $model->grids = [];
                $n1 = 0;
                foreach ($map['Grids'] as $item1) {
                    $model->grids[$n1] = grids::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
