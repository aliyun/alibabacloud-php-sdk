<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\FindBestMatchSecurityStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\FindBestMatchSecurityStrategyResponseBody\data\securityStrategy;

class data extends Model
{
    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $editionDisplayName;

    /**
     * @var securityStrategy
     */
    public $securityStrategy;
    protected $_name = [
        'edition' => 'Edition',
        'editionDisplayName' => 'EditionDisplayName',
        'securityStrategy' => 'SecurityStrategy',
    ];

    public function validate()
    {
        if (null !== $this->securityStrategy) {
            $this->securityStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->editionDisplayName) {
            $res['EditionDisplayName'] = $this->editionDisplayName;
        }

        if (null !== $this->securityStrategy) {
            $res['SecurityStrategy'] = null !== $this->securityStrategy ? $this->securityStrategy->toArray($noStream) : $this->securityStrategy;
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
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['EditionDisplayName'])) {
            $model->editionDisplayName = $map['EditionDisplayName'];
        }

        if (isset($map['SecurityStrategy'])) {
            $model->securityStrategy = securityStrategy::fromMap($map['SecurityStrategy']);
        }

        return $model;
    }
}
