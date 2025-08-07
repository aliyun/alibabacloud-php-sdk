<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests\assignConfigContest;

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
        if (\is_array($this->assignConfigContest)) {
            Model::validateArray($this->assignConfigContest);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignConfigContest) {
            if (\is_array($this->assignConfigContest)) {
                $res['AssignConfigContest'] = [];
                $n1 = 0;
                foreach ($this->assignConfigContest as $item1) {
                    $res['AssignConfigContest'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssignConfigContest'])) {
            if (!empty($map['AssignConfigContest'])) {
                $model->assignConfigContest = [];
                $n1 = 0;
                foreach ($map['AssignConfigContest'] as $item1) {
                    $model->assignConfigContest[$n1] = assignConfigContest::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
