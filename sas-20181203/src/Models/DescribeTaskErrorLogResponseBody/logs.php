<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTaskErrorLogResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The text content of the log.
     *
     * @example mv: cannot move \"CentOS-Base.repo\" to \"CentOS-Base.repo.backup\": Permission denied
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'text' => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
