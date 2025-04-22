<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class WatermarkEnableConfig extends Model
{
    /**
     * @var bool
     */
    public $displayAccessUserName;

    /**
     * @var string
     */
    public $displayCustomText;

    /**
     * @var bool
     */
    public $displayShareLinkCreatorName;

    /**
     * @var bool
     */
    public $enableDocPreview;
    protected $_name = [
        'displayAccessUserName' => 'display_access_user_name',
        'displayCustomText' => 'display_custom_text',
        'displayShareLinkCreatorName' => 'display_shareLink_creator_name',
        'enableDocPreview' => 'enable_doc_preview',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayAccessUserName) {
            $res['display_access_user_name'] = $this->displayAccessUserName;
        }

        if (null !== $this->displayCustomText) {
            $res['display_custom_text'] = $this->displayCustomText;
        }

        if (null !== $this->displayShareLinkCreatorName) {
            $res['display_shareLink_creator_name'] = $this->displayShareLinkCreatorName;
        }

        if (null !== $this->enableDocPreview) {
            $res['enable_doc_preview'] = $this->enableDocPreview;
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
        if (isset($map['display_access_user_name'])) {
            $model->displayAccessUserName = $map['display_access_user_name'];
        }

        if (isset($map['display_custom_text'])) {
            $model->displayCustomText = $map['display_custom_text'];
        }

        if (isset($map['display_shareLink_creator_name'])) {
            $model->displayShareLinkCreatorName = $map['display_shareLink_creator_name'];
        }

        if (isset($map['enable_doc_preview'])) {
            $model->enableDocPreview = $map['enable_doc_preview'];
        }

        return $model;
    }
}
