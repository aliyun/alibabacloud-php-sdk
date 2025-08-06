<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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
        'displayName' => 'DisplayName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
