<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\DBNodes;

use AlibabaCloud\Dara\Model;

class supportedApis extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $generationMode;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'apiName' => 'ApiName',
        'generationMode' => 'GenerationMode',
        'path' => 'Path',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->generationMode) {
            $res['GenerationMode'] = $this->generationMode;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['GenerationMode'])) {
            $model->generationMode = $map['GenerationMode'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
