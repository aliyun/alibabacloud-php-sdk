<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetHttpDDoSAttackProtectionRequest extends Model
{
    /**
     * @var string
     */
    public $globalMode;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'globalMode' => 'GlobalMode',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalMode) {
            $res['GlobalMode'] = $this->globalMode;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['GlobalMode'])) {
            $model->globalMode = $map['GlobalMode'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
