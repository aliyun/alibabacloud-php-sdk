<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceResourceRequest extends Model
{
    /**
     * @example DataManagement
     *
     * @var string
     */
    public $category;

    /**
     * @example storage
     *
     * @var string
     */
    public $group;

    /**
     * @example OSS
     *
     * @var string
     */
    public $type;

    /**
     * @example bucket-test-123
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'category' => 'Category',
        'group'    => 'Group',
        'type'     => 'Type',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
