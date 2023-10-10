<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigTemplatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The content of the configuration template.
     *
     * @example {"name":"William"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the configuration template.
     *
     * @example Test configuration template
     *
     * @var string
     */
    public $description;

    /**
     * @description The data format of the configuration template.
     *
     * @example JSON
     *
     * @var string
     */
    public $format;

    /**
     * @description The time when the configuration template was created.
     *
     * @example 1638171689626
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the configuration template was updated.
     *
     * @example 1638171689626
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the configuration template.
     *
     * @example 3d84efaf-37d9-49fb-a3a8-b38d5c2b460c
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the configuration template.
     *
     * @example config-tmpl-1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'format'      => 'Format',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'name'        => 'Name',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
