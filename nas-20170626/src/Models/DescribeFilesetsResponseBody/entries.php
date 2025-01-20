<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries\entrie;

class entries extends Model
{
    /**
     * @var entrie[]
     */
    public $entrie;
    protected $_name = [
        'entrie' => 'Entrie',
    ];

    public function validate()
    {
        if (\is_array($this->entrie)) {
            Model::validateArray($this->entrie);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entrie) {
            if (\is_array($this->entrie)) {
                $res['Entrie'] = [];
                $n1            = 0;
                foreach ($this->entrie as $item1) {
                    $res['Entrie'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Entrie'])) {
            if (!empty($map['Entrie'])) {
                $model->entrie = [];
                $n1            = 0;
                foreach ($map['Entrie'] as $item1) {
                    $model->entrie[$n1++] = entrie::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
