<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\UploadSampleFileResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class previewData extends Model
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string[][]
     */
    public $rows;
    protected $_name = [
        'headers' => 'Headers',
        'rows' => 'Rows',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['Rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    if (\is_array($item1)) {
                        $res['Rows'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Rows'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['Rows'] as $item1) {
                    if (!empty($item1)) {
                        $model->rows[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->rows[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
