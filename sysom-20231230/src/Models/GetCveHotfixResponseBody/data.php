<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetCveHotfixResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetCveHotfixResponseBody\data\hotfix;

class data extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var hotfix
     */
    public $hotfix;
    protected $_name = [
        'cveId' => 'cveId',
        'hotfix' => 'hotfix',
    ];

    public function validate()
    {
        if (null !== $this->hotfix) {
            $this->hotfix->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['cveId'] = $this->cveId;
        }

        if (null !== $this->hotfix) {
            $res['hotfix'] = null !== $this->hotfix ? $this->hotfix->toArray($noStream) : $this->hotfix;
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
        if (isset($map['cveId'])) {
            $model->cveId = $map['cveId'];
        }

        if (isset($map['hotfix'])) {
            $model->hotfix = hotfix::fromMap($map['hotfix']);
        }

        return $model;
    }
}
