<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig\assignConfigs\assignConfigContests;

class assignConfigs extends Model
{
    /**
     * @var assignConfigContests[]
     */
    public $assignConfigContests;
    protected $_name = [
        'assignConfigContests' => 'AssignConfigContests',
    ];

    public function validate()
    {
        if (\is_array($this->assignConfigContests)) {
            Model::validateArray($this->assignConfigContests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignConfigContests) {
            if (\is_array($this->assignConfigContests)) {
                $res['AssignConfigContests'] = [];
                $n1 = 0;
                foreach ($this->assignConfigContests as $item1) {
                    $res['AssignConfigContests'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssignConfigContests'])) {
            if (!empty($map['AssignConfigContests'])) {
                $model->assignConfigContests = [];
                $n1 = 0;
                foreach ($map['AssignConfigContests'] as $item1) {
                    $model->assignConfigContests[$n1] = assignConfigContests::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
