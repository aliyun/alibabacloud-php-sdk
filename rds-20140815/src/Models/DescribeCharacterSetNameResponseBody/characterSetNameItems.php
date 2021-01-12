<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return characterSetNameItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterSetName'])) {
            if (!empty($map['CharacterSetName'])) {
                $model->characterSetName = $map['CharacterSetName'];
            }
        }

        return $model;
    }
}
