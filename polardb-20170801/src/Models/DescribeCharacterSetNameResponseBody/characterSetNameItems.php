<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCharacterSetNameResponseBody;

use AlibabaCloud\Dara\Model;

class characterSetNameItems extends Model
{
    /**
     * @var string[]
     */
    public $characterSetName;
    protected $_name = [
        'characterSetName' => 'CharacterSetName',
    ];

    public function validate()
    {
        if (\is_array($this->characterSetName)) {
            Model::validateArray($this->characterSetName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characterSetName) {
            if (\is_array($this->characterSetName)) {
                $res['CharacterSetName'] = [];
                $n1                      = 0;
                foreach ($this->characterSetName as $item1) {
                    $res['CharacterSetName'][$n1++] = $item1;
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
        if (isset($map['CharacterSetName'])) {
            if (!empty($map['CharacterSetName'])) {
                $model->characterSetName = [];
                $n1                      = 0;
                foreach ($map['CharacterSetName'] as $item1) {
                    $model->characterSetName[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
