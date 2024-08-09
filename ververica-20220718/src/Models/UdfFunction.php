<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class UdfFunction extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $udfArtifactName;
    protected $_name = [
        'className'       => 'className',
        'functionName'    => 'functionName',
        'udfArtifactName' => 'udfArtifactName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->udfArtifactName) {
            $res['udfArtifactName'] = $this->udfArtifactName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UdfFunction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['udfArtifactName'])) {
            $model->udfArtifactName = $map['udfArtifactName'];
        }

        return $model;
    }
}
