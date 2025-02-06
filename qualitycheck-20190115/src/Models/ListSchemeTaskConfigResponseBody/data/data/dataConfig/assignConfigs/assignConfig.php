<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests;

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
        if (null !== $this->assignConfigContests) {
            $this->assignConfigContests->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignConfigContests) {
            $res['AssignConfigContests'] = null !== $this->assignConfigContests ? $this->assignConfigContests->toArray($noStream) : $this->assignConfigContests;
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
            $model->assignConfigContests = assignConfigContests::fromMap($map['AssignConfigContests']);
        }

        return $model;
    }
}
