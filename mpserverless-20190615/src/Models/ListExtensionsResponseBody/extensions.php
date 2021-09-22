<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListExtensionsResponseBody;

use AlibabaCloud\Tea\Model;

class extensions extends Model
{
    /**
     * @var string
     */
    public $extensionDocumentationLink;

    /**
     * @var string
     */
    public $extensionId;

    /**
     * @var string
     */
    public $extensionDesc;

    /**
     * @var string
     */
    public $extensionName;

    /**
     * @var string
     */
    public $enabled;
    protected $_name = [
        'extensionDocumentationLink' => 'ExtensionDocumentationLink',
        'extensionId'                => 'ExtensionId',
        'extensionDesc'              => 'ExtensionDesc',
        'extensionName'              => 'ExtensionName',
        'enabled'                    => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensionDocumentationLink) {
            $res['ExtensionDocumentationLink'] = $this->extensionDocumentationLink;
        }
        if (null !== $this->extensionId) {
            $res['ExtensionId'] = $this->extensionId;
        }
        if (null !== $this->extensionDesc) {
            $res['ExtensionDesc'] = $this->extensionDesc;
        }
        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['ExtensionDocumentationLink'])) {
            $model->extensionDocumentationLink = $map['ExtensionDocumentationLink'];
        }
        if (isset($map['ExtensionId'])) {
            $model->extensionId = $map['ExtensionId'];
        }
        if (isset($map['ExtensionDesc'])) {
            $model->extensionDesc = $map['ExtensionDesc'];
        }
        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
