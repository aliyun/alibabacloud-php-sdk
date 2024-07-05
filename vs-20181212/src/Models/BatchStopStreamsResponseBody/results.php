<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopStreamsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example stream not found
     *
     * @var string
     */
    public $error;

    /**
     * @example 323*****997-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example 3100000*****00000002
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'error' => 'Error',
        'id'    => 'Id',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
