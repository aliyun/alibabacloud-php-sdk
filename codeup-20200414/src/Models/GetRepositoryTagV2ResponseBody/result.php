<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagV2ResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagV2ResponseBody\result\commit;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagV2ResponseBody\result\signature;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commit
     */
    public $commit;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var signature
     */
    public $signature;
    protected $_name = [
        'commit'    => 'Commit',
        'id'        => 'Id',
        'message'   => 'Message',
        'name'      => 'Name',
        'signature' => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commit) {
            $res['Commit'] = null !== $this->commit ? $this->commit->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->signature) {
            $res['Signature'] = null !== $this->signature ? $this->signature->toMap() : null;
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
        if (isset($map['Commit'])) {
            $model->commit = commit::fromMap($map['Commit']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Signature'])) {
            $model->signature = signature::fromMap($map['Signature']);
        }

        return $model;
    }
}
