<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class templateVersions extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateFormat;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var string
     */
    public $updatedDate;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'description'     => 'Description',
        'templateFormat'  => 'TemplateFormat',
        'templateVersion' => 'TemplateVersion',
        'updatedBy'       => 'UpdatedBy',
        'updatedDate'     => 'UpdatedDate',
        'versionName'     => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
