<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetMatchOperatorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetMatchOperatorsResponseBody\matchTypeOperators\matchOperators;

class matchTypeOperators extends Model
{
    /**
     * @var matchOperators[]
     */
    public $matchOperators;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'matchOperators' => 'MatchOperators',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->matchOperators)) {
            Model::validateArray($this->matchOperators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchOperators) {
            if (\is_array($this->matchOperators)) {
                $res['MatchOperators'] = [];
                $n1 = 0;
                foreach ($this->matchOperators as $item1) {
                    $res['MatchOperators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MatchOperators'])) {
            if (!empty($map['MatchOperators'])) {
                $model->matchOperators = [];
                $n1 = 0;
                foreach ($map['MatchOperators'] as $item1) {
                    $model->matchOperators[$n1] = matchOperators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
