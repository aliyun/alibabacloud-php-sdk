<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\recordLine\paths;

class recordLine extends Model
{
    /**
     * @var string
     */
    public $lineId;

    /**
     * @var string
     */
    public $lineLabel;

    /**
     * @var paths[]
     */
    public $paths;
    protected $_name = [
        'lineId' => 'LineId',
        'lineLabel' => 'LineLabel',
        'paths' => 'Paths',
    ];

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = paths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
