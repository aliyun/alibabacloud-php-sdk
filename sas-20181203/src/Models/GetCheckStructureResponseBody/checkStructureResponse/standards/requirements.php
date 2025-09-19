<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards\requirements\sections;

class requirements extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var sections[]
     */
    public $sections;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var int
     */
    public $totalCheckCount;
    protected $_name = [
        'id' => 'Id',
        'sections' => 'Sections',
        'showName' => 'ShowName',
        'totalCheckCount' => 'TotalCheckCount',
    ];

    public function validate()
    {
        if (\is_array($this->sections)) {
            Model::validateArray($this->sections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->sections) {
            if (\is_array($this->sections)) {
                $res['Sections'] = [];
                $n1 = 0;
                foreach ($this->sections as $item1) {
                    $res['Sections'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->totalCheckCount) {
            $res['TotalCheckCount'] = $this->totalCheckCount;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Sections'])) {
            if (!empty($map['Sections'])) {
                $model->sections = [];
                $n1 = 0;
                foreach ($map['Sections'] as $item1) {
                    $model->sections[$n1] = sections::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['TotalCheckCount'])) {
            $model->totalCheckCount = $map['TotalCheckCount'];
        }

        return $model;
    }
}
