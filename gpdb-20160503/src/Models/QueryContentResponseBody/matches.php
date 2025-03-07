<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches\matchList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchList) {
            $res['MatchList'] = [];
            if (null !== $this->matchList && \is_array($this->matchList)) {
                $n = 0;
                foreach ($this->matchList as $item) {
                    $res['MatchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchList'])) {
            if (!empty($map['MatchList'])) {
                $model->matchList = [];
                $n                = 0;
                foreach ($map['MatchList'] as $item) {
                    $model->matchList[$n++] = null !== $item ? matchList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
