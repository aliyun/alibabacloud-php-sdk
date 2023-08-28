<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

use AlibabaCloud\Tea\Model;

class onlineMaster extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $hippoId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'domainName' => 'domainName',
        'hippoId'    => 'hippoId',
        'id'         => 'id',
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->hippoId) {
            $res['hippoId'] = $this->hippoId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineMaster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['hippoId'])) {
            $model->hippoId = $map['hippoId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
