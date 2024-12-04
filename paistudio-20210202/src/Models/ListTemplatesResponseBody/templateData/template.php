<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detail;

    /**
     * @example url://xxx
     *
     * @var string
     */
    public $docLink;

    /**
     * @description Use the UTC time format: yyyy-MM-ddTHH:mmZ
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description Use the UTC time format: yyyy-MM-ddTHH:mmZ
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example url://xxx
     *
     * @var string
     */
    public $imageLink;

    /**
     * @var mixed[][]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @example template-rbvg5wzljzjhc9ks92
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'content'         => 'Content',
        'creator'         => 'Creator',
        'description'     => 'Description',
        'detail'          => 'Detail',
        'docLink'         => 'DocLink',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'imageLink'       => 'ImageLink',
        'labels'          => 'Labels',
        'name'            => 'Name',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->docLink) {
            $res['DocLink'] = $this->docLink;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->imageLink) {
            $res['ImageLink'] = $this->imageLink;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DocLink'])) {
            $model->docLink = $map['DocLink'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['ImageLink'])) {
            $model->imageLink = $map['ImageLink'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
