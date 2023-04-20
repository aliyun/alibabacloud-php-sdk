<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListExtensionsResponseBody;

use AlibabaCloud\Tea\Model;

class extensions extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $extensionDesc;

    /**
     * @example https://help.aliyun.com/document_detail/137586.html
     *
     * @var string
     */
    public $extensionDocumentationLink;

    /**
     * @example ext-5d53a4fb1c9d446e2075a2cc
     *
     * @var string
     */
    public $extensionId;

    /**
     * @var string
     */
    public $extensionName;
    protected $_name = [
        'enabled'                    => 'Enabled',
        'extensionDesc'              => 'ExtensionDesc',
        'extensionDocumentationLink' => 'ExtensionDocumentationLink',
        'extensionId'                => 'ExtensionId',
        'extensionName'              => 'ExtensionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->extensionDesc) {
            $res['ExtensionDesc'] = $this->extensionDesc;
        }
        if (null !== $this->extensionDocumentationLink) {
            $res['ExtensionDocumentationLink'] = $this->extensionDocumentationLink;
        }
        if (null !== $this->extensionId) {
            $res['ExtensionId'] = $this->extensionId;
        }
        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExtensionDesc'])) {
            $model->extensionDesc = $map['ExtensionDesc'];
        }
        if (isset($map['ExtensionDocumentationLink'])) {
            $model->extensionDocumentationLink = $map['ExtensionDocumentationLink'];
        }
        if (isset($map['ExtensionId'])) {
            $model->extensionId = $map['ExtensionId'];
        }
        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }

        return $model;
    }
}
