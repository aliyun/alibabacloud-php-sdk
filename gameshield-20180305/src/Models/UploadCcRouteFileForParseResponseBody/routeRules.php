<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadCcRouteFileForParseResponseBody;

use AlibabaCloud\Tea\Model;

class routeRules extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[]
     */
    public $rservers;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'comment'  => 'Comment',
        'rservers' => 'Rservers',
        'id'       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->rservers) {
            $res['Rservers'] = $this->rservers;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Rservers'])) {
            if (!empty($map['Rservers'])) {
                $model->rservers = $map['Rservers'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
