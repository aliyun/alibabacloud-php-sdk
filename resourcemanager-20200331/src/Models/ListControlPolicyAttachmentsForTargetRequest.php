<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class ListControlPolicyAttachmentsForTargetRequest extends Model
{
    /**
     * @description The language in which you want to return the descriptions of the access control policies. Valid values:
     *
     *   zh-CN (default value): Chinese
     *   en: English
     *   ja: Japanese
     *
     * >  This parameter is valid only for system access control policies.
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The ID of the object whose access control policies you want to query. Access control policies can be attached to the following objects:
     *
     *   Root folder
     *   Subfolders of the Root folder
     *   Members
     *
     * @example fd-ZDNPiT****
     *
     * @var string
     */
    public $targetId;
    protected $_name = [
        'language' => 'Language',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListControlPolicyAttachmentsForTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
