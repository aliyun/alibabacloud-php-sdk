<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests\assignConfigContest;
use AlibabaCloud\Tea\Model;

class assignConfigContests extends Model
{
    /**
     * @var assignConfigContest[]
     */
    public $assignConfigContest;
    protected $_name = [
        'assignConfigContest' => 'AssignConfigContest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignConfigContest) {
            $res['AssignConfigContest'] = [];
            if (null !== $this->assignConfigContest && \is_array($this->assignConfigContest)) {
                $n = 0;
                foreach ($this->assignConfigContest as $item) {
                    $res['AssignConfigContest'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignConfigContests
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignConfigContest'])) {
            if (!empty($map['AssignConfigContest'])) {
                $model->assignConfigContest = [];
                $n                          = 0;
                foreach ($map['AssignConfigContest'] as $item) {
                    $model->assignConfigContest[$n++] = null !== $item ? assignConfigContest::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
