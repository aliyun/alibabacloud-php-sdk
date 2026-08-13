<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListGraphsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $businessProfile;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'businessProfile' => 'businessProfile',
        'displayName' => 'displayName',
        'graphName' => 'graphName',
        'isDefault' => 'isDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessProfile) {
            $res['businessProfile'] = $this->businessProfile;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
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
        if (isset($map['businessProfile'])) {
            $model->businessProfile = $map['businessProfile'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        return $model;
    }
}
