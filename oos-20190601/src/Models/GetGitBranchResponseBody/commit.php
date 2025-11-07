<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetGitBranchResponseBody;

use AlibabaCloud\Dara\Model;

class commit extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $sha;
    protected $_name = [
        'message' => 'Message',
        'sha' => 'Sha',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->sha) {
            $res['Sha'] = $this->sha;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Sha'])) {
            $model->sha = $map['Sha'];
        }

        return $model;
    }
}
