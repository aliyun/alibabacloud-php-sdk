<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class RewriteChannelTitleRequest extends Model
{
    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $userRequirement;
    protected $_name = [
        'draftId' => 'DraftId',
        'userRequirement' => 'UserRequirement',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }

        if (null !== $this->userRequirement) {
            $res['UserRequirement'] = $this->userRequirement;
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
        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        if (isset($map['UserRequirement'])) {
            $model->userRequirement = $map['UserRequirement'];
        }

        return $model;
    }
}
