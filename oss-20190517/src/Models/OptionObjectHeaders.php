<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class OptionObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example x-oss-test1,x-oss-test2
     *
     * @var string
     */
    public $accessControlRequestHeaders;

    /**
     * @example PUT
     *
     * @var string
     */
    public $accessControlRequestMethod;

    /**
     * @example http://www.example.com
     *
     * @var string
     */
    public $origin;
    protected $_name = [
        'accessControlRequestHeaders' => 'Access-Control-Request-Headers',
        'accessControlRequestMethod'  => 'Access-Control-Request-Method',
        'origin'                      => 'Origin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->accessControlRequestHeaders) {
            $res['Access-Control-Request-Headers'] = $this->accessControlRequestHeaders;
        }
        if (null !== $this->accessControlRequestMethod) {
            $res['Access-Control-Request-Method'] = $this->accessControlRequestMethod;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OptionObjectHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['Access-Control-Request-Headers'])) {
            $model->accessControlRequestHeaders = $map['Access-Control-Request-Headers'];
        }
        if (isset($map['Access-Control-Request-Method'])) {
            $model->accessControlRequestMethod = $map['Access-Control-Request-Method'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        return $model;
    }
}
