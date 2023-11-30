<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ShareLinkConfig extends Model
{
    /**
     * @var bool
     */
    public $enableShareLinkOfficeEdit;
    protected $_name = [
        'enableShareLinkOfficeEdit' => 'enable_share_link_office_edit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableShareLinkOfficeEdit) {
            $res['enable_share_link_office_edit'] = $this->enableShareLinkOfficeEdit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShareLinkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable_share_link_office_edit'])) {
            $model->enableShareLinkOfficeEdit = $map['enable_share_link_office_edit'];
        }

        return $model;
    }
}
