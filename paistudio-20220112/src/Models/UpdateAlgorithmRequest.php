<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlgorithmRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmDescription;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'algorithmDescription' => 'AlgorithmDescription',
        'displayName'          => 'DisplayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmDescription) {
            $res['AlgorithmDescription'] = $this->algorithmDescription;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlgorithmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmDescription'])) {
            $model->algorithmDescription = $map['AlgorithmDescription'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        return $model;
    }
}
