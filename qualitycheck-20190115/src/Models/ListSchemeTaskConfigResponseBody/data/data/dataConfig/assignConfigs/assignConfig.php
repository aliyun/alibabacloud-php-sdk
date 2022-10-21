<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests;
use AlibabaCloud\Tea\Model;

class assignConfig extends Model
{
    /**
     * @var assignConfigContests
     */
    public $assignConfigContests;
    protected $_name = [
        'assignConfigContests' => 'AssignConfigContests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignConfigContests) {
            $res['AssignConfigContests'] = null !== $this->assignConfigContests ? $this->assignConfigContests->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignConfigContests'])) {
            $model->assignConfigContests = assignConfigContests::fromMap($map['AssignConfigContests']);
        }

        return $model;
    }
}
