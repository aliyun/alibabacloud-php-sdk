<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketRequest;

use AlibabaCloud\Tea\Model;

class secretInfo extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $fileNameList;
    protected $_name = [
        'content'      => 'Content',
        'fileNameList' => 'FileNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileNameList) {
            $res['FileNameList'] = $this->fileNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileNameList'])) {
            if (!empty($map['FileNameList'])) {
                $model->fileNameList = $map['FileNameList'];
            }
        }

        return $model;
    }
}
