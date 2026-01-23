<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteStandardRelationsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteStandardRelationsRequest\deleteCommand\standardRefList;

class deleteCommand extends Model
{
    /**
     * @var string
     */
    public $relationType;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @var standardRefList[]
     */
    public $standardRefList;
    protected $_name = [
        'relationType' => 'RelationType',
        'standardId' => 'StandardId',
        'standardRefList' => 'StandardRefList',
    ];

    public function validate()
    {
        if (\is_array($this->standardRefList)) {
            Model::validateArray($this->standardRefList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }

        if (null !== $this->standardRefList) {
            if (\is_array($this->standardRefList)) {
                $res['StandardRefList'] = [];
                $n1 = 0;
                foreach ($this->standardRefList as $item1) {
                    $res['StandardRefList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        if (isset($map['StandardRefList'])) {
            if (!empty($map['StandardRefList'])) {
                $model->standardRefList = [];
                $n1 = 0;
                foreach ($map['StandardRefList'] as $item1) {
                    $model->standardRefList[$n1] = standardRefList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
