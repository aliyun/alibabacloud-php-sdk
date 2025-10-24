<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody;

use AlibabaCloud\Dara\Model;

class nonExistFileURLs extends Model
{
    /**
     * @var string[]
     */
    public $fileURL;
    protected $_name = [
        'fileURL' => 'FileURL',
    ];

    public function validate()
    {
        if (\is_array($this->fileURL)) {
            Model::validateArray($this->fileURL);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileURL) {
            if (\is_array($this->fileURL)) {
                $res['FileURL'] = [];
                $n1 = 0;
                foreach ($this->fileURL as $item1) {
                    $res['FileURL'][$n1] = $item1;
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
        if (isset($map['FileURL'])) {
            if (!empty($map['FileURL'])) {
                $model->fileURL = [];
                $n1 = 0;
                foreach ($map['FileURL'] as $item1) {
                    $model->fileURL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
