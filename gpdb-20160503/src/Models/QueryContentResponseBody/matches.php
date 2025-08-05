<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches\matchList;

class matches extends Model
{
    /**
     * @var matchList[]
     */
    public $matchList;
    protected $_name = [
        'matchList' => 'MatchList',
    ];

    public function validate()
    {
        if (\is_array($this->matchList)) {
            Model::validateArray($this->matchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchList) {
            if (\is_array($this->matchList)) {
                $res['MatchList'] = [];
                $n1 = 0;
                foreach ($this->matchList as $item1) {
                    $res['MatchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MatchList'])) {
            if (!empty($map['MatchList'])) {
                $model->matchList = [];
                $n1 = 0;
                foreach ($map['MatchList'] as $item1) {
                    $model->matchList[$n1] = matchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
