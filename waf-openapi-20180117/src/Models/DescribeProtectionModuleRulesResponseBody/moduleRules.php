<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeProtectionModuleRulesResponseBody;

use AlibabaCloud\Tea\Model;

class moduleRules extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'time'    => 'Time',
        'version' => 'Version',
        'content' => 'Content',
        'id'      => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
