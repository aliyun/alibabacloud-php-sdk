<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListRamRolesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $assumed;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'assumed'    => 'assumed',
        'name'       => 'name',
        'service'    => 'service',
        'templateId' => 'template_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumed) {
            $res['assumed'] = $this->assumed;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
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
        if (isset($map['assumed'])) {
            $model->assumed = $map['assumed'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['template_id'])) {
            $model->templateId = $map['template_id'];
        }

        return $model;
    }
}
