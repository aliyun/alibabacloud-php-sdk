<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class WatermarkConfig extends Model
{
    /**
     * @var bool
     */
    public $displayAccessUserName;

    /**
     * @var bool
     */
    public $displayShareLinkCreatorName;

    /**
     * @var bool
     */
    public $enableDocPreview;

    /**
     * @var bool
     */
    public $enableOnPreview;
    protected $_name = [
        'displayAccessUserName'       => 'display_access_user_name',
        'displayShareLinkCreatorName' => 'display_shareLink_creator_name',
        'enableDocPreview'            => 'enable_doc_preview',
        'enableOnPreview'             => 'enable_on_preview',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayAccessUserName) {
            $res['display_access_user_name'] = $this->displayAccessUserName;
        }
        if (null !== $this->displayShareLinkCreatorName) {
            $res['display_shareLink_creator_name'] = $this->displayShareLinkCreatorName;
        }
        if (null !== $this->enableDocPreview) {
            $res['enable_doc_preview'] = $this->enableDocPreview;
        }
        if (null !== $this->enableOnPreview) {
            $res['enable_on_preview'] = $this->enableOnPreview;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WatermarkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['display_access_user_name'])) {
            $model->displayAccessUserName = $map['display_access_user_name'];
        }
        if (isset($map['display_shareLink_creator_name'])) {
            $model->displayShareLinkCreatorName = $map['display_shareLink_creator_name'];
        }
        if (isset($map['enable_doc_preview'])) {
            $model->enableDocPreview = $map['enable_doc_preview'];
        }
        if (isset($map['enable_on_preview'])) {
            $model->enableOnPreview = $map['enable_on_preview'];
        }

        return $model;
    }
}
