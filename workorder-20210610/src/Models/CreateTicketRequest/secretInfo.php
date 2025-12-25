<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketRequest;

use AlibabaCloud\Dara\Model;

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
        'content' => 'Content',
        'fileNameList' => 'FileNameList',
    ];

    public function validate()
    {
        if (\is_array($this->fileNameList)) {
            Model::validateArray($this->fileNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fileNameList) {
            if (\is_array($this->fileNameList)) {
                $res['FileNameList'] = [];
                $n1 = 0;
                foreach ($this->fileNameList as $item1) {
                    $res['FileNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FileNameList'])) {
            if (!empty($map['FileNameList'])) {
                $model->fileNameList = [];
                $n1 = 0;
                foreach ($map['FileNameList'] as $item1) {
                    $model->fileNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
